<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Taskrouter\V1\Workspace;

use Twilio\Options;
use Twilio\Values;

abstract class TaskChannelOptions {
    /**
     * @param string $friendlyName A string to describe the TaskChannel resource
     * @param bool $channelOptimizedRouting Whether the TaskChannel should
     *                                      prioritize Workers that have been idle
     * @return UpdateTaskChannelOptions Options builder
     */
    public static function update(string $friendlyName = Values::NONE, bool $channelOptimizedRouting = Values::NONE): UpdateTaskChannelOptions {
        return new UpdateTaskChannelOptions($friendlyName, $channelOptimizedRouting);
    }

    /**
     * @param bool $channelOptimizedRouting Whether the TaskChannel should
     *                                      prioritize Workers that have been idle
     * @return CreateTaskChannelOptions Options builder
     */
    public static function create(bool $channelOptimizedRouting = Values::NONE): CreateTaskChannelOptions {
        return new CreateTaskChannelOptions($channelOptimizedRouting);
    }
}

class UpdateTaskChannelOptions extends Options {
    /**
     * @param string $friendlyName A string to describe the TaskChannel resource
     * @param bool $channelOptimizedRouting Whether the TaskChannel should
     *                                      prioritize Workers that have been idle
     */
    public function __construct(string $friendlyName = Values::NONE, bool $channelOptimizedRouting = Values::NONE) {
        $this->options['friendlyName'] = $friendlyName;
        $this->options['channelOptimizedRouting'] = $channelOptimizedRouting;
    }

    /**
     * A descriptive string that you create to describe the TaskChannel. It can be up to 64 characters long.
     *
     * @param string $friendlyName A string to describe the TaskChannel resource
     * @return $this Fluent Builder
     */
    public function setFriendlyName(string $friendlyName): self {
        $this->options['friendlyName'] = $friendlyName;
        return $this;
    }

    /**
     * Whether the TaskChannel should prioritize Workers that have been idle. If `true`, Workers that have been idle the longest are prioritized.
     *
     * @param bool $channelOptimizedRouting Whether the TaskChannel should
     *                                      prioritize Workers that have been idle
     * @return $this Fluent Builder
     */
    public function setChannelOptimizedRouting(bool $channelOptimizedRouting): self {
        $this->options['channelOptimizedRouting'] = $channelOptimizedRouting;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        $options = [];
        foreach ($this->options as $key => $value) {
            if ($value !== Values::NONE) {
                $options[] = "$key=$value";
            }
        }
        return '[Twilio.Taskrouter.V1.UpdateTaskChannelOptions ' . \implode(' ', $options) . ']';
    }
}

class CreateTaskChannelOptions extends Options {
    /**
     * @param bool $channelOptimizedRouting Whether the TaskChannel should
     *                                      prioritize Workers that have been idle
     */
    public function __construct(bool $channelOptimizedRouting = Values::NONE) {
        $this->options['channelOptimizedRouting'] = $channelOptimizedRouting;
    }

    /**
     * Whether the TaskChannel should prioritize Workers that have been idle. If `true`, Workers that have been idle the longest are prioritized.
     *
     * @param bool $channelOptimizedRouting Whether the TaskChannel should
     *                                      prioritize Workers that have been idle
     * @return $this Fluent Builder
     */
    public function setChannelOptimizedRouting(bool $channelOptimizedRouting): self {
        $this->options['channelOptimizedRouting'] = $channelOptimizedRouting;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        $options = [];
        foreach ($this->options as $key => $value) {
            if ($value !== Values::NONE) {
                $options[] = "$key=$value";
            }
        }
        return '[Twilio.Taskrouter.V1.CreateTaskChannelOptions ' . \implode(' ', $options) . ']';
    }
}