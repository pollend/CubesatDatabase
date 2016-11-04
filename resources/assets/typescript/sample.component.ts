import {Component} from 'angular2/core';
 
@Component({
    selector: 'sample',
    template: `
    <h1>h1</h1>
    <h2>h2</h2>
    <h3>h3</h3>
    <h4>h4</h4>
    <h5>h5</h5>
    <h6>h6</h6>

    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed q</p>

    <a class="button-sm">small</a>
    <a class="button-md">medium</a>
    <a class="button-lg">large</a>
    <table class="table ">
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
	  <tbody>
	</table>

	<table class="table stripped hover">
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
	<p>pagination</p>
	<div class="pagination">
	  <ul>
	    <li class="page-prev"><a href="javascript:void(0)">Prev</a></li>
	    <li>
	      <ul>
	        <li><a href="javascript:void(0)">1</a></li>
	        <li><a href="javascript:void(0)">2</a></li>
	        <li><a href="javascript:void(0)">3</a></li>
	        <li><a href="javascript:void(0)">4</a></li>
	        <li><a href="javascript:void(0)">5</a></li>
	        <li><a href="javascript:void(0)">6</a></li>
	        <li><a href="javascript:void(0)">7</a></li>
	      </ul>
	    </li>
	    <li class="page-next"><a href="javascript:void(0)">Next</a></li>
	  </ul>
	</div>
	<p>button button</p>
	<button type="button" class="cubesat-button-small">Small</button>
	<button type="button" class="cubesat-button-medium">Medium</button>
	<button type="button" class="cubesat-button-large">Large</button>
	<p>anchor button</p>
	<a type="button" class="cubesat-button-small" href="/">Small</a>
	<a type="button" class="cubesat-button-medium" href="/">Medium</a>
	<a type="button" class="cubesat-button-large" href="/">Large</a>

    `
})

export class SampleComponent { }
