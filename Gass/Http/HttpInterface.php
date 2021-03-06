<?php
/**
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * Google Analytics Server Side is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 3 of the License, or any later
 * version.
 *
 * The GNU General Public License can be found at:
 * http://www.gnu.org/copyleft/gpl.html.
 *
 * N/B: This code is nether written or endorsed by Google or any of it's
 *      employees. "Google" and "Google Analytics" are trademarks of
 *      Google Inc. and it's respective subsidiaries.
 *
 * @copyright   Copyright (c) 2011-2013 Tom Chapman (http://tom-chapman.co.uk/)
 * @license     http://www.gnu.org/copyleft/gpl.html  GPL
 * @author      Tom Chapman
 * @link        http://github.com/chappy84/google-analytics-server-side
 * @category    GoogleAnalyticsServerSide
 * @package     GoogleAnalyticsServerSide
 * @subpackage  Http
 */

/**
 * @namespace
 */
namespace Gass\Http;

use Gass\Adapter;

/**
 * Interface for all Http Adapters
 *
 * @uses        Gass\Adapter
 * @copyright   Copyright (c) 2011-2013 Tom Chapman (http://tom-chapman.co.uk/)
 * @license     http://www.gnu.org/copyleft/gpl.html  GPL
 * @author      Tom Chapman
 * @category    GoogleAnalyticsServerSide
 * @package     GoogleAnalyticsServerSide
 * @subpackage  Http
 */
interface HttpInterface extends Adapter\AdapterInterface
{

    /**
     * Returns the current Accepted Language for the sent headers
     *
     * @return string
     * @access public
     */
    public function getAcceptLanguage();

    /**
     * Returns information related to the previously made request
     *
     * @param mixed $index [optional]
     * @return mixed
     * @access public
     */
    public function getInfo($index = null);

    /**
     * Returns the current Remote Address for the sent headers (X-Forwarded-For)
     *
     * @return string
     * @access public
     */
    public function getRemoteAddress();

    /**
     * Returns the existing request response
     *
     * @return mixed
     * @access public
     */
    public function getResponse();

    /**
     * Returns the current User-Agent for the sent headers
     *
     * @return string
     * @access public
     */
    public function getUserAgent();

    /**
     * Sets the current Accepted Language for the sent headers
     *
     * @param string $acceptLanguage
     * @return Gass\Http\HttpInterface
     * @access public
     */
    public function setAcceptLanguage($acceptLanguage);

    /**
     * Sets the current Remote Address for the sent headers (X-Forwarded-For)
     *
     * @param string $remoteAddress
     * @return Gass\Http\HttpInterface
     * @access public
     */
    public function setRemoteAddress($remoteAddress);

    /**
     * Sets the existing request response
     *
     * @param mixed $response
     * @return Gass\Http\HttpInterface
     * @access public
     */
    public function setResponse($response);

    /**
     * Sets the Url to Request
     *
     * @param string $url
     * @return Gass\Http\HttpInterface
     * @access public
     */
    public function setUrl($url);

    /**
     * Sets the current User-Agent for the sent headers
     *
     * @param string $userAgent
     * @return Gass\Http\HttpInterface
     * @access public
     */
    public function setUserAgent($userAgent);

    /**
     * Makes a request with either the existing options set or the ones provided
     *
     * @param string $url
     * @param array $options
     * @return Gass\Http\HttpInterface
     * @access public
     */
    public function request($url = null, array $options = array());
}
