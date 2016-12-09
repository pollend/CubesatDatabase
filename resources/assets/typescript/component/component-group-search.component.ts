// Exact copy except import UserService from core
import { Component, OnInit }      from '@angular/core';
import { FormBuilder, FormGroup,FormArray } from '@angular/forms';

@Component({
  selector: 'component-group-search',
  templateUrl: 'templates/component-group-search.component.html'
})
export class ComponentGroupSearchComponent {
	constructor(private  fb: FormBuilder){
	}

}


