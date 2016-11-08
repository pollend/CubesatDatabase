import { Injectable }     from '@angular/core';
import { Http, Response } from '@angular/http';
import {Pagination} from "./../models/pagination";
import {Vendor} from "./../models/vendor";

import {Observable}     from 'rxjs/Rx';


@Injectable()
export class VendorService {
	constructor(private http: Http ) { 

	}

	private _spaceport_url = '/api/v1/vendor';

	getSpaceports(page:number){
		return this.http.get(this._spaceport_url + "?page=" + page)
			.map(request => <Pagination<Vendor>>request.json())
			.catch(this.handleError);
	}

	private handleError(error: Response) {
		// in a real world app, we may send the error to some remote logging infrastructure
		// instead of just logging it to the console
		console.error(error);
		return Observable.throw(error.json().error || 'Server error');
	}
}

