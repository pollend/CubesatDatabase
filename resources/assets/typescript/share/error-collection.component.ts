import { Component, Input  } from '@angular/core';


@Component({
  selector: 'error-collection',
  templateUrl: 'templates/error-collection.component.html'
})
export class ErrorCollectionComponent {
	@Input()
	errors: any;
	
	@Input()
	item: string;

}


