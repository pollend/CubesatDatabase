import {Injectable} from 'angular2/core';

@Injectable()
export class Spaceport {
	public id: number;
	public latlong : string;
	public url_website : string;
	public description : string;
	public url_googlemap : string;
	public address1 : string;
	public address2 : string;
	public name : string;
	public state : string;
	public country : string;
	public city : string;
	public zip : string;


	constructor() {
		// code...
	}


}