<?php

class ClassFlat {

	public function
	MethodPublic() { return; }

	protected function
	MethodProtected() { return; }

	private function
	MethodPrivate() { return; }

	////////
	////////

	public function
	MethodReturnsBool():
	Bool { return TRUE;
	}

	public function
	MethodTakesBool(Bool $Arg1) { return; }

	public function
	MethodTakesBoolReturnsBool(Bool $Arg1):
	Bool { return TRUE; }

}
