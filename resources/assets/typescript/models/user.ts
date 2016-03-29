import {Injectable} from 'angular2/core';

@Injectable()
export class User {
	public id: number;
	public name : string;
	public type : string;
	public email : string;
	
	constructor() {
		// code...
	}


}