import {Injectable}     from 'angular2/core';
import {Http, Response} from 'angular2/http';

import {Pagination} from "./../models/pagination";
import {Spaceport} from "./../models/spaceport";

import {Observable}     from 'rxjs/Rx';


@Injectable()
export class SpaceportService {
	constructor(private http: Http ) { 

	}

	private _spaceport_url = '/api/v1/spaceport';

	getSpaceport(page:number){
		return this.http.get(this._spaceport_url + "?page=" + page)
			.map(request => <Pagination<Spaceport>>request.json())
			.catch(this.handleError);
	}

	private handleError(error: Response) {
		// in a real world app, we may send the error to some remote logging infrastructure
		// instead of just logging it to the console
		console.error(error);
		return Observable.throw(error.json().error || 'Server error');
	}
}

