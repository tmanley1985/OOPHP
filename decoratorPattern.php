<?php

// Decorators need an interface to adhere to

interface MembershipServiceInterface
{
	public function getApprovedClasses();
}

class BasicGymMembership implements MembershipServiceInterface
{
	public function getApprovedClasses()
	{
		return 'Has access to free weights';
	}
}

class KarateClass implements MembershipServiceInterface
{
	public $membership;
	// In the constructor, we accept an instance of the interface.  Since this class
	// is a decorator, we accept a class that implements the interface.
	public function __construct(MembershipServiceInterface $membership)
	{
		$this->membership = $membership;
	}

	// We can use the injected object to dynamically update the current object at runtime.
	// So for example, we can call the getapproved classes and append to it some other
	// class that the person may get.
	public function getApprovedClasses()
	{
		return $this->membership->getApprovedClasses() . ' and has access to karate classes';
	}
}
class BoxingClass implements MembershipServiceInterface
{
	public $membership;
	// In the constructor, we accept an instance of the interface.  Since this class
	// is a decorator, we accept a class that implements the interface.
	public function __construct(MembershipServiceInterface $membership)
	{
		$this->membership = $membership;
	}

	// We can use the injected object to dynamically update the current object at runtime.
	// So for example, we can call the getapproved classes and append to it some other
	// class that the person may get.
	public function getApprovedClasses()
	{
		return $this->membership->getApprovedClasses() . ' and has access to boxing classes';
	}
}

// You want to wrap objects with objects that extend behavior or functionality.  This is better than 
// inheritance in some cases so you don't have class bloat.  This can also be very flexible.
echo ( new KarateClass( new BasicGymMembership ) )->getApprovedClasses();

echo ( new BoxingClass( new KarateClass( new BasicGymMembership() ) ) )->getApprovedClasses();
