<div class="col-sm-3">
    <div class="card bg-light mb-3">
        <!<!-- test category -->
        <!<!-- endt -->
        <div class="card-header bg-primary text-white text-uppercase"><i class="fa fa-list"></i> Categories</div>
        <ul class="list-group category_block">
            {{-- <c:forEach items="${ListCC}" var="o">
                <li class="list-group-item text-white ${tag == o.maLoai ? "active":""}"><a href="category?cid=${o.maLoai}">${o.tenLoai}</a></li>
                </c:forEach> --}}
                @forelse ($category as $item)
                    <li class="list-group-item text-white "><a href="}">{{ $item->category_name }}</a></li>
                @empty
                @endforelse 
        </ul>
    </div>
    <div class="card bg-light mb-3">
        <!<!-- test branch -->
        <!<!-- endt -->
        <div class="card-header bg-primary text-white text-uppercase"><i class="fa fa-list"></i> Branch</div>
        <ul class="list-group category_block">
            {{-- <c:forEach items="${ListCC}" var="o">
                <li class="list-group-item text-white ${tag == o.maLoai ? "active":""}"><a href="category?cid=${o.maLoai}">${o.tenLoai}</a></li>
                </c:forEach> --}}
                @forelse ($branch as $item)
                    <li class="list-group-item text-white "><a href="}">{{ $item->branch_name }}}</a></li>
                @empty
                @endforelse 
        </ul>
    
    </div>


    @foreach ( $last_product as  $ls)
    <div class="card bg-light mb-3">
        <div class="card-header bg-success text-white text-uppercase">Last product</div>
        <div class="card-body">
            <img class="img-fluid" src="{{ url('storage/'.$ls->product_image) }}" />
            <h5 class="card-title">{{ $ls->product_name }}</h5>
            <p class="card-text">{{ $ls->product_price }}</p>
            <p class="bloc_left_price">{{ $ls->product_desc }}</p>
        </div>
    </div>
    @endforeach
    
</div>