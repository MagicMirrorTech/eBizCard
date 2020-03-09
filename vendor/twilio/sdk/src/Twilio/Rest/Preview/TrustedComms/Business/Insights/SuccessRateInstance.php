<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Preview\TrustedComms\Business\Insights;

use Twilio\Deserialize;
use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;

/**
 * PLEASE NOTE that this class contains preview products that are subject to change. Use them with caution. If you currently do not have developer preview access, please contact help@twilio.com.
 *
 * @property string $accountSid
 * @property string $businessSid
 * @property \DateTime $end
 * @property string $interval
 * @property array $reports
 * @property \DateTime $start
 * @property string $url
 */
class SuccessRateInstance extends InstanceResource {
    /**
     * Initialize the SuccessRateInstance
     *
     * @param Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $businessSid A string that uniquely identifies this Business.
     */
    public function __construct(Version $version, array $payload, string $businessSid) {
        parent::__construct($version);

        // Marshaled Properties
        $this->properties = [
            'accountSid' => Values::array_get($payload, 'account_sid'),
            'businessSid' => Values::array_get($payload, 'business_sid'),
            'end' => Deserialize::dateTime(Values::array_get($payload, 'end')),
            'interval' => Values::array_get($payload, 'interval'),
            'reports' => Values::array_get($payload, 'reports'),
            'start' => Deserialize::dateTime(Values::array_get($payload, 'start')),
            'url' => Values::array_get($payload, 'url'),
        ];

        $this->solution = ['businessSid' => $businessSid, ];
    }

    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     *
     * @return SuccessRateContext Context for this SuccessRateInstance
     */
    protected function proxy(): SuccessRateContext {
        if (!$this->context) {
            $this->context = new SuccessRateContext($this->version, $this->solution['businessSid']);
        }

        return $this->context;
    }

    /**
     * Fetch a SuccessRateInstance
     *
     * @param array|Options $options Optional Arguments
     * @return SuccessRateInstance Fetched SuccessRateInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(array $options = []): SuccessRateInstance {
        return $this->proxy()->fetch($options);
    }

    /**
     * Magic getter to access properties
     *
     * @param string $name Property to access
     * @return mixed The requested property
     * @throws TwilioException For unknown properties
     */
    public function __get(string $name) {
        if (\array_key_exists($name, $this->properties)) {
            return $this->properties[$name];
        }

        if (\property_exists($this, '_' . $name)) {
            $method = 'get' . \ucfirst($name);
            return $this->$method();
        }

        throw new TwilioException('Unknown property: ' . $name);
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        $context = [];
        foreach ($this->solution as $key => $value) {
            $context[] = "$key=$value";
        }
        return '[Twilio.Preview.TrustedComms.SuccessRateInstance ' . \implode(' ', $context) . ']';
    }
}