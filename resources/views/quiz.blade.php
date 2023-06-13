@extends('layout')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-11 col-sm-10 col-md-10 col-lg-6 col-xl-10 r p-0 mt-3 mb-2">
            <div class="card2 px-0 pt-4 pb-0 mt-3 mb-3 shadow-lg" style="background: #ffffff">
                <div class="card-body">
                                         
                    </div>
                    <form action="{{ route('quiztest') }}" method="POST" action="/orders" id="myForm">
                        <input type="hidden" name="submitted" id="submitted" value="0">
                    <div class="text-dark">
                        @foreach ($data as $dt)
                            @csrf
                            {{-- Pertanyaan 2 --}}
                            <div class="col-12 container">
                                <p class="fw-bold mt-3">{{ $dt->id }}. {{ $dt->question }}</p>
                                <input type="hidden" class="form-control" id="ans[{{ $dt->id }}]"
                                    name="ans[{{ $dt->id }}]" autocomplete="off" value="{{ $dt->answer }}">
                                <?php $valuesArrayAns = explode(',', $dt->all_answers);
                                $valuesArrayAnsId = explode(',', $dt->all_id_answers); ?>
                                <div class="form-check">
                                    <div class="">
                                        <?php for ($i = 0; $i < count($valuesArrayAns); $i++): ?>
                                        <div class="card mb-2 col-md-5">
                                            <div class="card-body">
                                                <div class="form-check col-md-6">
                                                    <input class="form-check-input" type="radio" name="ans2[{{ $dt->id }}]"
                                                        value="{{ $valuesArrayAnsId[$i] }}">
                                                    <label class="form-check-label">
                                                        {{ $valuesArrayAns[$i] }}
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <?php endfor; ?>
                                        <div class="card mb-2 col-md-5" style="display: none;">
                                            <div class="card-body">
                                                <div class="form-check col-md-6">
                                                    <input class="form-check-input" type="radio" name="ans2[{{ $dt->id }}]"
                                                        value="0" checked>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- <div class="d-flex">
                                    <div class="card mb-2 col-md-5">
                                        <div class="card-body">
                                            <div class="form-check col-md-6">
                                                <input class="form-check-input" type="radio" name="">
                                                <label class="form-check-label">
                                                    Apakah True?
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-1">

                                    </div>

                                    <div class="card mb-2 col-md-5">
                                        <div class="card-body">
                                            <div class="form-check col-md-6">
                                                <input class="form-check-input" type="radio" name="">
                                                <label class="form-check-label">
                                                    Oh tidak Aqshaa
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                                </div>
                            </div>
                        @endforeach


                        <div class="mt-3 mb-2">
                            <div class="">
                                <div class="d-flex justify-content-center"> <button class="btn btn-primary"
                                        type="submit" value="submit" id="submitButton">Submit</button></div>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>

                {{-- </form> --}}
                {{-- @endforeach --}}
            </div>
        </div>
    </div>
</div>
@endsection
