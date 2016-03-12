import {Component} from 'angular2/core';
 
@Component({
    selector: 'home',
    template: `
    <h1>HOME</h1>
    <a class="button-sm">small</a>
    <a class="button-md">medium</a>
    <a class="button-lg">large</a>

	<table class="table">
	  <thead>
	    <tr>
	      <th>Header content 1</th>
	      <th>Header content 2</th>
	       <th>Header content 1</th>
	      <th>Header content 2</th>
	    </tr>
	  </thead> 
	  <tbody>
	    <tr>
	      <td>Body content 1</td>
	      <td>Body content 2</td>
	      <td>Body content 1</td>
	        <td>Body content 1</td>
	    </tr>
	    <tr>
	      <td>Body content 1</td>
	      <td>Body content 2</td>
	      <td>Body content 1</td>
	        <td>Body content 1</td>
	    </tr>
	    <tr>
	      <td>Body content 1</td>
	      <td>Body content 2</td>
	       <td>Body content 1</td>
	        <td>Body content 1</td>
	    </tr>
	    <tr>
	      <td>Body content 1</td>
	      <td>Body content 2</td>
	      <td>Body content 1</td>
	        <td>Body content 1</td>
	    </tr>
	    <tr>
	      <td>Body content 1</td>
	      <td>Body content 2</td>
	      <td>Body content 1</td>
	        <td>Body content 1</td>
	    </tr>
	  </tbody>
	</table>
    `
})

export class SampleComponent { }
