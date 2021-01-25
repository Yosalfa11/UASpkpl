<?php
class LoginAdmin
{
    function username($username)
    {
        if ($username == 'yosalfabr') {
            return TRUE;
        }
    }
    function password($password)
    {
        if ($password == 'uadsukses') {
            return TRUE;
        }
    }


    function main($username, $password)
    {
        if ($this->username($username) == TRUE) {
            if ($this->password($password) == TRUE) {
                    return 'Anda berhasil login';
                } else {
                    return 'Password yang anda masukan salah';
                }
            } else {
                return 'Username yang anda masukan salah';
            }
        }
    }

$authentikasi = new LoginAdmin;
$cek = $authentikasi->main('yosalfabr', 'uadsukses');
echo $cek;