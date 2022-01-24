@extends('main')
@section('content')

    <form method="post" class="gme container w-75" action="smt.php">

        <input type="hidden" name="to" value="puste.aghayeva@gmail.com">

        <div class="form-group row mt-5">
            <label for="ad" class="col-sm-3 col-form-label fs-5">Soyad, ad, ata adı:<span style="color:red">*</span></label>
            <div class="col-sm-9">
                <input type="text" name="ad" class="form-control" id="ad" required="">
            </div>
        </div>

        <div class="form-group row">
            <label for="from" class="col-sm-3 col-form-label fs-5">Elektron-poçt:<span style="color:red">*</span></label>
            <div class="col-sm-9">
                <input type="email" name="from" class="form-control" id="from" required="">
            </div>
        </div>

        <div class="form-group row">
            <label for="tel" class="col-sm-3 col-form-label fs-5">Telefon:<span style="color:red">*</span></label>
            <div class="col-sm-9">
                <input type="text" name="tel" class="form-control" id="tel" required="">
            </div>
        </div>

        <div class="form-group row">
            <label for="unvan" class="col-sm-3 col-form-label fs-5">Ünvan:<span style="color:red">*</span></label>
            <div class="col-sm-9">
                <input type="text" name="unvan" class="form-control" id="unvan" required="">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 col-form-label fs-5">Müraciətin növü:<span style="color:red">*</span></label>
            <div class="col-sm-9">

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="muracietnov" id="erize" value="erize" required="">
                    <label class="form-check-label fs-5" for="erize">
                        ərizə
                    </label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="muracietnov" id="sikayet" value="sikayet" required="">
                    <label class="form-check-label fs-5" for="sikayet">
                        şikayət
                    </label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="muracietnov" id="teklif" value="teklif" required="">
                    <label class="form-check-label fs-5" for="teklif">
                        təklif
                    </label>
                </div>


            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 col-form-label fs-5" for="message">Müraciətin mətni:<span style="color:red">*</span></label>
            <div class="col-sm-9">
                <textarea class="form-control" name="message" id="message" cols="40" rows="10"></textarea>
            </div>
        </div>



        <div class="row">
            <div class="col-sm-3">
            </div>
            <div class="col-sm-9">
                <input type="submit" class="btn btn-info fs-5" value="Göndər">
                <input type="reset" class="btn btn-danger fs-5" value="Sil">
            </div>
        </div>

    </form>

@endsection