import { Injectable } from '@angular/core';
import { Http, Response } from '@angular/http';
import {User} from './../models/user';

import {Observable}     from 'rxjs/Rx';
import {ApiService} from "./api-service";

import { Headers, RequestOptions } from '@angular/http';

@Injectable()
export class UserService extends ApiService{
	private _user: User;
	constructor(http: Http) {
		super(http);

		let token = localStorage.getItem("token");
		
		let headers = new Headers({ 'Content-Type': 'application/json' });
		let options = new RequestOptions({ headers: headers });

		 this.http.post(UserService.API + "/verify", {'token':token},options).map(this.extractData).map((res) => this.updateToken(null,res)).subscribe();
	}
	

	protected updateToken(token: any,user: User)
	{
		if(token != null)
		{
			localStorage.setItem("token",token);
		}
		this._user = user;
		return  this._user;
	}

	get token(): string{
		let token = localStorage.getItem("token");
		return token;
	}

	get user():User{
		return this._user;
	}

	public register(payload: any ) : Observable<User> {
		let headers = new Headers({ 'Content-Type': 'application/json' });
		let options = new RequestOptions({ headers: headers });

		return this.http.post(UserService.API + "/register",payload,options) 
		.map(this.extractData)
		.map((res) => this.updateToken(res.token,res.user))
		.catch(this.handleError);
	}

	public login(payload: any) : Observable<User>{
		let headers = new Headers({ 'Content-Type': 'application/json' });
		let options = new RequestOptions({ headers: headers });


		return this.http.post(UserService.API + "/login", payload, options) 
		.map(this.extractData)
		.map((res) => this.updateToken(res.token,res.user))
		.catch(this.handleError);
	}

	public logout(payload: any){
		let headers = new Headers({ 'Content-Type': 'application/json' });
		let options = new RequestOptions({ headers: headers });


		let token = localStorage.getItem("token");
		 this.http.post(UserService.API + "/logout", {'token':token},options).map(this.extractData).subscribe();
		 this._user = null;
	}

	private getUser(res: any)
	{
		return  res.user;
	}

	isUserLoggedIn()
	{
		return this._user != null;
	}
}

