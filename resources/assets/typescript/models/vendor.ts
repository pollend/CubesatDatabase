import {Injectable} from 'angular2/core';

@Injectable()
export class Vendor {
	public id: number;
	public name : string;
	public vendor_website : string;
	public contact_info : string;
	public type : string;

	constructor() {
		// code...
	}
}