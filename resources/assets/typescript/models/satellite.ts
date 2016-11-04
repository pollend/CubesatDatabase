import {Injectable} from 'angular2/core';

@Injectable()
export class Satellite {
	public id: number;
	public name : string;
	public content: string;
	public COSPAR: string;
	public wiki: string;
	public status: string;
	public tle: string;
	public orbit: string;

	constructor() {
		// code...
	}


}