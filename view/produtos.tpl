<h2>lista de produtos</h2>
<hr>
<ul style="list-style: none">
    
    {foreach from=$PRO item=P}
    
    <li class="col-md-4">
        
        <div class="thumbnail">
            
            <img src="{$URL}/media/images/{$P.pro_img}" alt="">
            
            <div class="caption">
                <h5> {$P.pro_nome}</h5>
                <h3 class="text-center text-danger">R${$P.pro_valor}</h3>
                
                <button class="btn btn-success">detalhes</button>
                
            </div>
            
            
            
        </div> 
       
        
    
    </li>
    
    {/foreach}
    
</ul>
