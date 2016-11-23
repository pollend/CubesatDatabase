import { Injectable }     from '@angular/core';
import { Http, Response } from '@angular/http';
import {Pagination} from "./../models/pagination";
import {Vendor} from "./../models/vendor";

import {Observable}     from 'rxjs/Rx';


import {ApiService} from "./api-service";

@Injectable()
export class VendorService extends ApiService {
	constructor( http: Http ) { 
		super(http);
	}

	getVendors() : Observable<Vendor[]>
	{
		return this.http.get(VendorService.API + "/vendor")
			.map(this.extractData);
	}

}

