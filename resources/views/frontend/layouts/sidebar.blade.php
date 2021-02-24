

@section('sidebar')

@inject('categories' ,'App\Models\Category')

 <div class="nav">

 <a class="nav-link" id="menu"  onclick="myFunction()"  href="javascript:void(0);"  class="icon"><i class="fa fa-bars"></i>Produse</a>
 
    
         
        <div class="multi-level" id="multi-level">
          <div class="item1">
            
                  
               @foreach ($categories->tags()  as $category)
                  <input type="checkbox" id="{{ $category->name }}"/>
         <img src="public/images/Arrow.png" class="arrow"> <label id="categ" for="{{ $category->name }}" style="font-weight: bold"> {{ $category->name }}</label>   
       

                        

                        <ul>
                             
                            @foreach ($category->children as $child)
                               <li> 
                            
                                 <a href="product/{{ $child->id }}"> {{ $child->name }}</a>
                     
                              </li>   
                            @endforeach
                             
                          </ul>
                      
                      
                       
                    @endforeach


    </div>

          
            
        </div>
        
    </div>
@show
