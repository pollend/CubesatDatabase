import {Injectable}     from 'angular2/core';
import {Http, Response} from 'angular2/http';

import {Pagination} from "./../models/pagination";
import {SatComponent} from "./../models/sat_component";


import {Observable}     from 'rxjs/Rx';


@Injectable()
export class ComponentService {
	constructor(private http: Http ) { 

	}

	private _component_url = '/api/v1/component';

	getComponent(page:number){
		return this.http.get(this._component_url + "?page=" + page)
			.map(request => <Pagination<SatComponent>>request.json())
			.catch(this.handleError);
	}

	private handleError(error: Response) {
		// in a real world app, we may send the error to some remote logging infrastructure
		// instead of just logging it to the console
		console.error(error);
		return Observable.throw(error.json().error || 'Server error');
	}
}

