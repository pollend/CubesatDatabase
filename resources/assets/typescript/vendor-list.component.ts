//angular 2 core
import {Component, OnInit} from 'angular2/core';
import {Router, RouteParams} from 'angular2/router';

//components
import {PaginationComponent} from './pagination.component';

//services
import {VendorService} from "./services/vendor-service";

//Model
import {Vendor} from "./models/vendor";
import {Pagination} from "./models/pagination";



@Component({
    selector: 'vendor-list',
    templateUrl: 'templates/vendor-list.component.html',
    providers: [VendorService],
    directives: [PaginationComponent]
})

export class VendorListComponent { 

	pageination: Pagination<Vendor>;
	errorMessage: string;
	private page: number = 0;

	constructor(private _vendor_service: VendorService, private _route: Router, routeParams : RouteParams) { 
		this.pageination = null;
		this.page = +routeParams.get('page');
	}


	ngOnInit()
	{ 

		//retrieve satellites
		this._vendor_service.getSpaceports(this.page).subscribe(
			vedors => this.pageination = vedors,
			error => this.errorMessage = <any>error);
	}

	private onPageChange(page: number)
	{
		this.page = page;
		this.updateList();
	}

	private vendorSelect(vendor: Vendor) {
		this._route.navigate(['VendorSingle', { id: vendor.id }]);
	}

	private updateList()
	{
		this._route.navigate(['VendorList', { page: this.page }]);
	}
}

