import { Injectable }     from '@angular/core';
import { Http, Response } from '@angular/http';
import { Headers, RequestOptions } from '@angular/http';
import {User} from './../models/user';

import {Observable}     from 'rxjs/Rx';

@Injectable()
export class UserService {
	private user: User;

	constructor(private http: Http) {}

	private _user_url = '/auth/';

	register(name: string, password: string ) : Observable<User> {
		
		let headers = new Headers({ 'Content-Type': 'application/json' });
    	let options = new RequestOptions({ headers: headers });
    	return this.http.post(this._user_url + "/register", { name }, options)
               .map(this.extractData);
               //.then(this.extractData)
               //.catch(this.handleError);
	}

	login(name: string, password: string) : Observable<User>{
		
	}

	private extractData(res: Response) {
		let body = res.json();
		return body.data || { };
	}

	isUserLoggedIn()
	{
		return true;
	}
}

