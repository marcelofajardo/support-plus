<?php

use App\Models\User;
use Modules\Setting\Models\GeneralSetting;
use Spatie\Permission\Models\Role;


if (!function_exists('assetPath')) {
    function assetPath($path): string
    {
        $path = explode('/', trim('/' . $path, '/'));
        if ($path == 'public') {
            unset($path[0]);
        }

        $path = implode('/', $path);

        if (defined('INDEX_FROM') && INDEX_FROM !== 'public') {
            $path = 'public/' . $path;
        }
        return asset($path);

    }
}


function isSuperAdmin()
{
    if (auth()->check() && auth()->user()->hasRole('Super Admin')) {
        return true;
    } else {
        return false;
    }
}

function isAdmin()
{
    if (auth()->check() && auth()->user()->hasRole('Admin')) {
        return true;
    } else {
        return false;
    }
}

function assignToAdmin($user)
{
    $role = Role::where('name', '=', 'Admin')->first();
    if ($role) {
        $user->assignRole($role);
        return true;
    } else {
        return false;
    }
}

if (!function_exists('updateEnv')) {
    function updateEnv($envKey, $envValue)
    {
        $envValue = str_replace('\\', '\\' . '\\', $envValue);
        $value = '"' . $envValue . '"';
        $envFile = app()->environmentFilePath();
        $str = file_get_contents($envFile);
        $str .= "\n";
        $keyPosition = strpos($str, "{$envKey}=");
        if (is_bool($keyPosition)) {
            $str .= $envKey . '="' . $envValue . '"';
        } else {
            $endOfLinePosition = strpos($str, "\n", $keyPosition);
            $oldLine = substr($str, $keyPosition, $endOfLinePosition - $keyPosition);
            $str = str_replace($oldLine, "{$envKey}={$value}", $str);
            $str = substr($str, 0, -1);
        }
        if (!file_put_contents($envFile, $str)) {
            return false;
        } else {
            return true;
        }
    }
}


if (!function_exists('updateSetting')) {
    function updateSetting($key, $value)
    {
        try {
            $setting = GeneralSetting::where('key', $key)->first();
            if ($setting) {
                $setting->value = $value;
                $setting->save();
            } else {
                $setting = new GeneralSetting();
                $setting->key = $key;
                $setting->value = $value;
                $setting->save();
            }
            return true;
        } catch (Exception $e) {
            return false;
        }
    }
}

if (!function_exists('settings')) {
    function setting($index)
    {
        try {
            return app('generalSettings')[$index];
        } catch (Exception $exception) {
            return null;
        }
    }
}

if (!function_exists('colors')) {
    function colors($index)
    {
        try {
            return app('generalSettings')[$index];
        } catch (Exception $exception) {
            return null;
        }
    }
}


if (!function_exists('activeLanguages')) {
    function activeLanguages()
    {
        try {
            return app('activeLanguages');
        } catch (Exception $exception) {
            return [];
        }
    }
}
if (!function_exists('trials')) {
    function trials()
    {
        $days = [];
        for ($i = 0; $i <= 90; $i++) {
            if ($i == 0 || $i == 1) {
                $days_text = trans('common.Day');
            } else {
                $days_text = trans('common.Days');
            }
            $days[$i] = $i . ' ' . $days_text;
        }
        return $days;
    }
}

if (!function_exists('getPriceFormat')) {
    function getPriceFormat($price)
    {
        $symbol = setting('currency_symbol');
        $type = setting('currency_show_type');
        if (!empty($price) || $price != 0) {

            $price = number_format((float)str_replace(',', '', $price), 2);

            if ($type == 1) {
                $result = $symbol . $price;

            } elseif ($type == 2) {
                $result = $symbol . ' ' . $price;

            } elseif ($type == 3) {
                $result = $price . $symbol;

            } elseif ($type == 4) {
                $result = $price . ' ' . $symbol;

            } else {
                $result = $price;
            }
        } else {
            $result = trans('common.Free');
        }
        return $result;
    }
}

if (!function_exists('hex2rgb')) {
    function hex2rgb($colour)
    {
        if ($colour[0] == '#') {
            $colour = substr($colour, 1);
        }
        if (strlen($colour) == 6) {
            list($r, $g, $b) = array($colour[0] . $colour[1], $colour[2] . $colour[3], $colour[4] . $colour[5]);
        } elseif (strlen($colour) == 3) {
            list($r, $g, $b) = array($colour[0] . $colour[0], $colour[1] . $colour[1], $colour[2] . $colour[2]);
        } else {
            return false;
        }
        $r = hexdec($r);
        $g = hexdec($g);
        $b = hexdec($b);
        return array('red' => $r, 'green' => $g, 'blue' => $b);
    }
}
if (!function_exists('loginUserBusiness')) {
    function loginUserBusiness()
    {
        return DB::table('businesses')->where('created_by', auth()->id())->select(['id', 'name', 'logo'])->get();
    }
}

if (!function_exists('getAdmin')) {
    function getAdmin()
    {
        return User::first(['name', 'email', 'avatar']);
    }
}


if (!function_exists('getImage')) {
    function getImage($path)
    {
        if (File::exists($path)) {
            return asset($path);
        } else {
            return asset('public/images/noimage.png');
        }
    }
}
