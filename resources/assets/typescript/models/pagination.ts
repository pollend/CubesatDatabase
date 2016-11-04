import {Injectable} from 'angular2/core';

@Injectable()
export class Pagination<T> {
	public total: number;
	public per_page: number;
	public current_page: number;
	public next_page_url: string;
	public prev_page_url: string;
	public from: number;
	public to: number;
	public data: T[];


	public id : number;

	constructor() {
		// code...
	}

}