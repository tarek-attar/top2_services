<div class="product-item">
    <div class="product-thumb">
        {{-- <span class="bage">Sale</span>  بعمل الها عمود جديد في قاعدة البانات < سيل برودكت > وبعمل شرط لاظهاره --}}
        <img class="img-responsive" src="{{ asset('uploads/' . $service->image) }}" alt="product-img" />
        <div class="preview-meta">
            <ul>
                <li>
                    <span data-toggle="modal" data-target="#product-modal">
                        <i class="tf-ion-ios-search-strong"></i>
                    </span>
                </li>
                <li>
                    <a href="#!"><i class="tf-ion-ios-heart"></i></a>
                </li>
                <li>
                    <a href="#!"><i class="tf-ion-android-cart"></i></a>
                </li>
            </ul>
        </div>
    </div>
    <div class="product-content">
        <h4><a href="product-single.html">
                {{ $service->$name }}
            </a></h4>
        <p class="price">$200</p>
    </div>
</div>
