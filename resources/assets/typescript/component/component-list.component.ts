// Exact copy except import UserService from core
import { Component, OnInit }      from '@angular/core';
import { FormBuilder, FormGroup,FormArray } from '@angular/forms';

@Component({
  selector: 'component-list',
  templateUrl: 'templates/component-list.component.html'
})
export class ComponentListComponent {
	componentSearchForm : FormGroup;
	constructor(private  fb: FormBuilder){
		this.componentSearchForm = fb.group({
			'email' : '',
			'password' : ''
		});
	}

}


