import {Component, Input, Output, OnChanges, EventEmitter} from 'angular2/core';


import {Pagination} from './models/pagination'

@Component({
    selector: 'pagination-component',
    templateUrl: 'templates/pagination.component.html'
})


export class PaginationComponent<T>  { 
	
	@Input()
	pagination: Pagination<T>;


	@Output() 
	page_change: EventEmitter<number> = new EventEmitter();

	private _starting_range: Array<number> = new Array<number>();

	ngDoCheck() {

		if (this.pagination) {
			var max_range = Math.floor(this.pagination.total / this.pagination.per_page)+1;
			var hit_max = false;

			this._starting_range = new Array<number>();

			for (var i = this.pagination.current_page - 3; i < this.pagination.current_page + 5; i++) {
				if (i > 0 && i <= max_range)
					this._starting_range.push(i);
				if (i >= max_range)
					hit_max = true;
			}
			if (!hit_max) {
				this._starting_range.push(-1)
				this._starting_range.push(max_range);
			}
			if (this.pagination.data.length == 0)
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

