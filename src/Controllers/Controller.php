<?php

namespace Ollyo\Task\Controllers;

use PaypalServerSdkLib\Authentication\ClientCredentialsAuthCredentialsBuilder;
use PaypalServerSdkLib\Environment;
use PaypalServerSdkLib\Logging\LoggingConfigurationBuilder;
use PaypalServerSdkLib\Logging\RequestLoggingConfigurationBuilder;
use PaypalServerSdkLib\Logging\ResponseLoggingConfigurationBuilder;
use PaypalServerSdkLib\PaypalServerSdkClientBuilder;
use Psr\Log\LogLevel;

class Controller
{
    // @todo: add your code here if needed.
    public function handleCheckout($request)
    {
        $client = PaypalServerSdkClientBuilder::init()
            ->clientCredentialsAuthCredentials(
                ClientCredentialsAuthCredentialsBuilder::init(
                    'AUckGZtkosYVlphrelqn_LysMjKMkC_ff7YQowVBNgszRx4Fcv2bIw4PAYipY34A3BTH5GczNOOXKfKC',
                    'EP9eSnBwnmSITwQYEGvDaT1q_LVrHm3zTc_QVILNb-s4s2Dvq-qRR9QK1IXi3PJrMKf68dMnb-JCmzS3'
                )
            )
            ->environment(Environment::SANDBOX)
            ->loggingConfiguration(
                LoggingConfigurationBuilder::init()
                    ->level(LogLevel::INFO)
                    ->requestConfiguration(RequestLoggingConfigurationBuilder::init()->body(true))
                    ->responseConfiguration(ResponseLoggingConfigurationBuilder::init()->headers(true))
            )
            ->build();
    }
}
