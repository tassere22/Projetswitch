<div class="modal fade" id="productModal{{ $product->id }}" tabindex="-1" role="dialog"
    aria-labelledby="productModalLabel{{ $product->id }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="productModalLabel{{ $product->id }}">Détails du produit
                    {{ $product->nom_product }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img src="{{ asset($product->image_product) }}" alt="{{ $product->nom_product }}" width="150">
                <h3>{{ $product->nom_product }}</h3>
                <p>Prix: {{ $product->prix_product }}</p>
                <p>Description: {{ $product->description_product }}</p>
                <p>Catégorie: {{ $product->categorie->nom_categorie }}</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>