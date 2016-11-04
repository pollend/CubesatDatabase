import {Injectable}     from 'angular2/core';
import {Http, Response} from 'angular2/http';

import {Pagination} from "./../models/pagination";
import {Spaceport} from "./../models/spaceport";

import {Observable}     from 'rxjs/Rx';


@Injectable()
export class UserService {
	constructor(private http: Http) {

	}

	private _spaceport_url = '/api/v1/user';

	isUserLoggedIn()
	{
		return true;
	}
}

