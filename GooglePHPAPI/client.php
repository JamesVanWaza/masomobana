<?php
/**
 * Copyright 2010 Google Inc
 * Licensed under the Apache License, Version 2.0
 * http://www.apache.org/licenses/LICENSE-2.0
 */

// use Google\Auth\ApplicationDefaultCredentials;
// use Google\Auth\CacheInterface;
// use Google\Auth\CredentialsLoader;
// use Google\Auth\HttpHandlerFactory;
// use Google\Auth\OAuth2;
// use Google\Auth\Credentials\ServiceAccountCredentials;
// use Google\Auth\Credentials\UserRefreshCredentials;
// use GuzzleHttp\Client;
// use GuzzleHttp\ClientInterface;
// use GuzzleHttp\Ring\Client\StreamHandler;
// use GuzzleHttp\Psr7;
// use Psr\Http\Message\RequestInterface;
// use Psr\Log\LoggerInterface;
// use Monolog\Logger;
// use Monolog\Handler\StreamHandler as MonologStreamHandler;

/**
 * The Google API Client
 * https://github.com/google/google-api-php-client
 */
class Google_Client {
	const LIBVER = "2.0.0-alpha";
	const USER_AGENT_SUFFIX = "google-api-php-client/";
	const OAUTH2_REVOKE_URI = "https://accounts.google.com/o/oauth2/revoke";
	const OAUTH2_TOKEN_URI = "https://www.googleapis.com/oauth2/v4/token";
	const OAUTH2_AUTH_URL = "https://accounts.google.com/o/oauth2/auth";
	const API_BASE_PATH = "https://www.googleapis.com";

	/** @var Google\Auth\OAuth2 $auth */
	private $auth;

	/** @var GuzzleHttp\ClientInterface $http */
	private $http;

	/** @var Google\Auth\CacheInterface $cache  */
	private $cache;

	/** @var array access token */
	private $token;

	/** @var Google_Config $config  */
	private $config;

	/** @var Google_Logger_Abstract $logger */
	private $logger;

	/** @var boolean $deferExecution */
	private $deferExecution = false;

	/**
	 * @var array scopes
	 * Scopes requested by the client
	 */
	protected $requestedScopes = [];

	/**
	 * Construct the Google Client
	 * @param $config Google_Config or string for the ini file to load
	 */

	public function __construct($config = array()) {
		$this->config = array_merge([
			'application_name' => '',

			/** Don't change these unless you're working against a special development or testing environment */
			'base_path' => self::API_BASE_PATH,

			/** https://developers.google.com/console */
			'client_id' => '',
		]);
	}
}

?>