import { Injectable }     from '@angular/core';
import { Http, Response } from '@angular/http';
import { Headers, RequestOptions } from '@angular/http';



import {Observable}     from 'rxjs/Rx';
import {ApiService} from "./api-service";

import {Pagination} from "./../models/pagination";
import {MissionFlat} from "../models/mission_flat";

@Injectable()
export class MissionService extends ApiService{
	constructor(http: Http ) { 
		super(http);
	}

	getMissions(payload:any) : Observable<Pagination<MissionFlat>>{
		let headers = new Headers({ 'Content-Type': 'application/json' });
		let options = new RequestOptions({ headers: headers });


		return this.http.post(MissionService.API + "/mission",payload,options)
			.map(this.extractData);

		// return this.http.get(this._mission_url + "?page=" + page)
		// 	.map(request => <Pagination<Mission>>request.json())
		// 	.catch(this.handleError);
	}

}

