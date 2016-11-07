import {Component, Input, Output, OnChanges, EventEmitter} from '@angular/core';


import {Pagination} from './../models/pagination'

@Component({
    selector: 'pagination',
    templateUrl: 'templates/pagination.component.html'
})


export class PaginationComponent<T>  { 
	
	@Input()
	pageinator: Pagination<T>;


	@Output() 
	page_change: EventEmitter<number> = new EventEmitter<number>();

	private _starting_range: Array<number> = new Array<number>();

	ngDoCheck() {

		if (this.pageinator) {
			var max_range = Math.floor(this.pageinator.total / this.pageinator.per_page) + 1;
			var hit_max = false;

			this._starting_range = new Array<number>();

			for (var i = this.pageinator.current_page - 3; i < this.pageinator.current_page + 5; i++) {
				if (i > 0 && i <= max_range)
					this._starting_range.push(i);
				if (i >= max_range-1)
					hit_max = true;
			}
			if (!hit_max) {
				this._starting_range.push(-1)
				this._starting_range.push(max_range-1);
				this._starting_range.push(max_range);
			}

			if (this.pageinator.data.length == 0)
			{
				this.page_change.emit(max_range);
			}
		}

	}

	onPageChange(page: number)
	{
		this.page_change.emit(page);
	}

	
}

