<?php

class OldSkoolRootClass {

	const
	ClassConstant1 = 1;

	const
	ClassConstant2 = 2;

	////////
	////////

	public
	$InstancePropertyPublic = 'public';

	protected
	$InstancePropertyProtected = 'protected';

	private
	$InstancePropertyPrivate = 'private';

	////////
	////////

	public function
	InstanceMethodPublic() { return; }

	protected function
	InstanceMethodProtected() { return; }

	private function
	InstanceMethodPrivate() { return; }

	////////
	////////

	public function
	InstanceMethodReturnBool():
	Bool { return TRUE;
	}

	public function
	InstanceMethodTakesBool(Bool $Arg1) { return; }

	public function
	InstanceMethodTakesAndReturnsBool(Bool $Arg1):
	Bool { return TRUE; }

	////////
	////////

	static public function
	GlobalFunctionPublic() { return; }

	static private function
	GlobalFunctionProtected() { return; }

	static private function
	GlobalFunctionPrivate() { return; }

}
