import { Injectable } from '@angular/core';
import { Http, Response } from '@angular/http';
import {User} from './../models/user';

import {Observable}     from 'rxjs/Rx';
import {ApiService} from "./api-service";


import { Headers, RequestOptions } from '@angular/http';


import { Profile } from './../models/profile';
import { UserService } from './user-service';


import { FileUploader,FileUploaderOptions } from 'ng2-file-upload';



@Injectable()
export class ProfileService extends ApiService{
	private _user: User;
	constructor(http: Http, private userService: UserService) {
		super(http);
	}

	getProfile(name: string) : Observable<Profile>
	{
		return this.http.get(ProfileService.API + "/profile/" + name).map(this.extractData);
	}

	updateProfile(payload: any) :  Observable<Profile>
	{
		let headers = new Headers({ 'Content-Type': 'application/json' });
		let options = new RequestOptions({ headers: headers });

		this.userService.applyTokenToHeader(options);

		return this.http.post(ProfileService.API + "/account/update",payload,options).map(this.extractData);
	}

	getProfileUploaderOptions() : FileUploaderOptions
	{
		let uploaderOptions: FileUploaderOptions = {url: ApiService.API + "/account/update_image"};
		this.userService.applyTokenToFileUploader(uploaderOptions);
		return  uploaderOptions;
	}	

	changePassword(password: ChangePassword)
	{
		let options = new RequestOptions({ headers: this.apiHeader() });

		this.userService.applyTokenToHeader(options);

		return  this.http.post(ProfileService.API + "/account/change_password",password,options)
		.map(this.extractData)
		.catch(this.handleError);

	}
}

export interface ChangePassword
{
	old_password : string;
	password  : string;
	password_confirmation : string;
}


