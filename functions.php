<?php

use Dump\Reflection\Reflection;

if (!function_exists('class_method_exists')) {
	/**
	 * Checks if the class and method has been defined
	 */
	function class_method_exists(string $class, string $method): bool
	{
		return Reflection::classMethodExist($class, $method);
	}
}


if (!function_exists('instance_of')) {
	/**
	 * Checks if the class or enum instance of
	 */
	function instance_of(mixed $class, string $interface): bool
	{
		return Reflection::instanceOf($class, $interface);
	}
}


if (!function_exists('dont_instance_of')) {
	/**
	 * Checks if the class or enum don't instance of
	 * @see instance_of
	 */
	function dont_instance_of(mixed $class, string $interface): bool
	{
		return Reflection::dontInstanceOf($class, $interface);
	}
}


if (!function_exists('getVal')) {
	/**
	 * Get a primitive type of parameter
	 */
	function getVal(mixed $class): mixed
	{
		return Reflection::getVal($class);
	}
}


if (!function_exists('getArrayable')) {
	/**
	 * Results array of items from any.
	 */
	function getArrayable(mixed $items): array
	{
		return Reflection::getArrayable($items);
	}
}
