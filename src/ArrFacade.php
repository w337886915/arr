<?php

namespace w337886915\arr;


use w337886915\framework\build\Facade;

class ArrFacade extends Facade {
	public static function getFacadeAccessor() {
		return 'Arr';
	}
}