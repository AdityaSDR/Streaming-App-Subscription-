<?php
/**
 * Created by PhpStorm.
 * User: Taranpreet Singh Ray
 * Date: 22-06-2021
 * Time: 18:47
 */

namespace App;


class MSG
{
    const AUTH = [
        'EMAIL_IN_USE' => 'Please enter another email. Current email is already in use.',
        'EMAIL_VALID' => 'Valid',
        'USR_VALID' => 'Username is valid.',
        'USR_IN_USE' => 'Username already in use.',
        'PASS_VALID' => 'Valid',
        'PASS_ERR' => 'Please create a strong password.',
        'ERR_REGISTER' => 'Something went wrong while registration. Please try again later.',
        'ACC_CRET_ERR_MAIL' => 'Account created success. Something went wrong while sending account activation email. Please contact staff',
        'ACC_CRET_CHK_MAIL' => 'Account created success. Please check your email for activation email.',
        'USR_FND' => 'User found.',
        'USR_NT_FND' => 'User not found in record.',
        'ACC_PSS_RCV' => 'Please click the button below and set new password for your account.',
        'ACC_RCV' => 'Account recovery instrctions has been sent to your registered email address. Please follow the instructions.',
        'ERR_ACC_RCV' => 'Something went wrong while sending account recovery instructions.',
        'ACC_ACTV' => 'Account marked activated.',
        'ERR_ACC_ACTV' => "Something went wrong while activating account. <br> Invalid key",
        'INV_KEY' => 'Invalid key unable to process request.',
        'INV_LOG' => 'Invalid request. Unable to process.',
        'SUCC_LOG' => 'Login Success. You will be redirected!',
        'USR_LOG_NF' => 'Invalid user.',
        'USR_LOG_INV_PASS' => 'Invalid Password',
        'USR_LOG_DEC' => 'Account still left for verification. Please check verification mail.',
        'ERR_PASS_RST' => 'Something went wrong while resetting the password. Please try again later.',
        'PASS_RST_SUCC' => 'Password token updated.'
    ];

    const MAIL = [
        'ACC_ACTIVE_WLC' => 'Let"s get this started. Please click the button below to activate your account and start streaming.'
    ];

    const CONTACT = [
        'ERR_QRY' => 'Something went wrong while creating query.',
        'QRY_SUCC' => 'Query created success. Our staff will contact back you soon.'
    ];
}