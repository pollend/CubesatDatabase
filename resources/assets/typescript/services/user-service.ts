 import { Injectable } from '@angular/core';
import { Http, Response } from '@angular/http';
import {User} from './../models/user';

import {Observable}     from 'rxjs/Rx';

import {ApiService} from "./api-service";

import { Headers, RequestOptions } from '@angular/http';

import { FileUploader,FileUploaderOptions } from 'ng2-file-upload';



@Injectable()
export class UserService extends ApiService{
	private _user: User;
	private get token(): string{
		let token = localStorage.getItem("token");
		return token;
	}

	get user(){
		return  this._user;
	}

	getUser():Observable<User>{

		if(this._user == undefined)
		{

			let headers = new Headers({ 'Content-Type': 'application/json' });
			let options = new RequestOptions({ headers: headers });

			this.applyTokenToHeader(options);

			return this.http.post(UserService.API + "/auth/verify",{},options).map(this.extractData).map((res) => {
				this._user = res;
				return this._user;
			});
		
		}

		return Observable.of<User>(this._user);
	}


	constructor(http: Http) {
		super(http);
		this.getUser().subscribe();
	}


	public applyTokenToHeader(options: RequestOptions)
	{
		options.headers.append("Authorization","Bearer " + this.token);
	}

	public applyTokenToFileUploader(options: FileUploaderOptions)
	{
			options.authToken = "Bearer " + this.token;
	}

	protected updateToken(token: any)
	{
		if(token != null)
		{
			localStorage.setItem("token",token);
		}
	}

	public register(payload: any ) : Observable<User> {
		let headers = new Headers({ 'Content-Type': 'application/json' });
		let options = new RequestOptions({ headers: headers });

		return this.http.post(UserService.API + "/auth/register",payload,options) 
		.map(this.extractData)
		.map((res) => {
			this._user = res.user;
			this.updateToken(res.token);
			return this._user;
		
		}).catch(this.handleError);
	}

	public login(payload: any) : Observable<User>{
		let headers = new Headers({ 'Content-Type': 'application/json' });
		let options = new RequestOptions({ headers: headers });


		return this.http.post(UserService.API + "/auth/login", payload, options) 
		.map(this.extractData)
		.map((res) => {
			this._user = res.user;
			this.updateToken(res.token);
			return this._user;
		}).catch(this.handleError);
	}

	public logout(payload: any){
		let headers = new Headers({ 'Content-Type': 'application/json' });
		let options = new RequestOptions({ headers: headers });


		let token = localStorage.getItem("token");
		 this.http.post(UserService.API + "/auth/logout", {'token':token},options).map(this.extractData).subscribe();
		 this._user = null;
	}


	isUserLoggedIn()
	{
		return this._user != null;
	}
}

