@extends('website.app')
@section('content')
@include('website.components.navbar')
<section class="">
<div class="container" style="">
    <div class="row justify-content-center mb-5">
        <div class="col-md-12">

            <h1 class="mb-5">Panduan Penangan Insiden Siber</h1>

            <article class="my-4 fs-6">
                <div class="table-responsive col-auto">
                    <table class="table table-striped table-sm">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Name</th>
                                <th scope="col">Size</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp
                            @foreach ($panduan as $item)
                            <tr>
                                <td scope="row">{{ $no++ }}</td>
                                <td> <a href="{{ Storage::url('public/panduan/'.$item->file) }}"
                                        target="_blank">{{ $item->name }}</a> </td>
                                <td>{{ $item->size }}</td>
                            </tr>
                            @endforeach
                            {{-- <tr>
                                <td>2</td>
                                <td> <a href="storage/uploads-guidances/Panduan-Penanganan-Insiden-Web-Defacement.pdf"
                                        target="_blank">Panduan Penanganan Insiden Web Defacement</a> </td>
                                <td>1.095,17 Kb</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td> <a href="storage/uploads-guidances/Panduan-Penanganan-Insiden-Serangan-DDoS.pdf"
                                        target="_blank">Panduan Penanganan Insiden Serangan DDOS</a> </td>
                                <td>857,31 Kb</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td> <a href="storage/uploads-guidances/Panduan-Penanganan-Insiden-Serangan-Phishing.pdf"
                                        target="_blank">Panduan Penanganan Insiden Serangan Phising</a> </td>
                                <td>945,77 Kb</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td> <a href="storage/uploads-guidances/Panduan-Penanganan-Insiden-Malware.pdf"
                                        target="_blank">Panduan Penanganan Insiden Serangan Malware</a> </td>
                                <td>664,75 Kb</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td> <a href="storage/uploads-guidances/panduan-penggunaan-pgp.pdf" target="_blank">Cara
                                        Kirim Email dengan PGP</a> </td>
                                <td>9.823,86 Kb</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td> <a href="storage/uploads-guidances/Panduan Penanganan Insiden Web Defacement Judi Online.pdf"
                                        target="_blank">Panduan Penanganan Insiden Web Defacement Judi Online</a> </td>
                                <td>17.577,50 Kb</td>
                            </tr> --}}
                        </tbody>
                    </table>
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="mb-3">
                            Showing
                            1
                            to
                            7
                            of
                            11
                            enteries
                        </div>
                        <div class="pagination pagination-sm">
                            <nav>
                                <ul class="pagination">

                                    <li class="page-item disabled" aria-disabled="true" aria-label="&laquo; Previous">
                                        <span class="page-link" aria-hidden="true">&lsaquo;</span>
                                    </li>
                                    <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
                                    <li class="page-item"><a class="page-link" href="">2</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href=""rel="next" aria-label="Next &raquo;">&rsaquo;</a>
                                    </li>
                                </ul>
                            </nav>

                        </div>
                    </div>
                </div>
            </article>

        </div>
    </div>
</div>
</section>