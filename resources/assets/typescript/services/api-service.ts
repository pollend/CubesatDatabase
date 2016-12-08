
import {Observable}     from 'rxjs/Rx';
import { Http, Response } from '@angular/http';


import { Headers } from '@angular/http';


export class ApiService{
	public static API: string = "api/v1";
	protected http: Http;
	constructor( http: Http)
	{
		this.http = http;
	}

	protected extractData(res: Response) {
		let body = res.json();
		return body || { };
	}

	protected handleError (error: Response ) {
	  let body = error.json();
	  return Observable.throw(body || { });
	}

	protected apiHeader()
	{
		return new Headers({ 
			'Content-Type': 'application/json' , 
			'X-Requested-With' : 'XMLHttpRequest'
		});
	}


}