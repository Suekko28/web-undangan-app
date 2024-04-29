@extends('layouts.app')

@section('navbar-admin')
    <main>
        <div class="container-xxl flex-grow-1 container-p-y">
            <a class="btn btn-primary mb-3" href="{{ route('nama-undangan-create', ['id' => $undanganAlt1->id]) }}">+ Buat
                Undangan</a>
            @include('layouts.message')
            <!-- Responsive Table -->
            <div class="card">
                <h5 class="card-header">Undangan Alternative 1</h5>
                <div class="p-3">
                    <div class="mb-3">
                        <input type="text" id="searchInput" class="form-control" placeholder="Cari...">
                    </div>
                    <div id="nonamaUndangansMessage" class="alert alert-warning" style="display: none;">
                        Nama Undangan tidak ditemukan.
                    </div>
                </div>

                <div class="table-responsive text-nowrap p-3">
                    <form id="deleteForm" action="{{ route('nama-undangan.destroy', ['id' => $undanganAlt1->id]) }}"
                        method="POST">
                        @csrf
                        @method('DELETE')
                        <table class="table table-bordered">
                            <button type="submit" class="btn btn-danger mb-3" id="deleteSelected">Hapus yang
                                Dipilih</button>
                            <thead>
                                <tr class="text-nowrap text-center">
                                    <th><input type="checkbox" id="selectAll"></th>
                                    <th>No</th>
                                    <th>Nama Undangan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = $namaUndangans->firstItem(); ?>
                                @foreach ($namaUndangans as $item)
                                    <tr class="text-center">
                                        <td><input type="checkbox" class="delete-checkbox" name="selected[]"
                                                value="{{ $item->id }}"></td>
                                        <td scope="row">{{ $i }}</td>
                                        <td scope="row">{{ $item->nama_undangan }}</td>
                                        <td>
                                            <div class="btn-group-vertical">
                                                <a href="{{ url('nama-undangan/' . $item->id) . '/edit' }}"
                                                    class="btn btn-warning mb-2 rounded"><i class="fa fa-pen-to-square"
                                                        style="color:white;"></i></a>
                                                <button class="btn btn-danger delete-btn rounded mb-2"
                                                    namaUndangans-id="{{ $item->id }}"><i
                                                        class="fa fa-trash"></i></button>
                                                <a href="#exampleModal{{ $item->id }}"
                                                    class="btn btn-primary rounded mb-2" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal{{ $item->id }}">
                                                    <i class="fa fa-link" style="color:white;"></i>
                                                </a>

                                            </div>
                                        </td>
                                    </tr>
                                    <?php $i++; ?>
                                @endforeach
                            </tbody>
                        </table>
                    </form>
                    @foreach ($namaUndangans as $item)
                        <div class="modal fade" id="exampleModal{{ $item->id }}" tabindex="-1"
                            aria-labelledby="exampleModalLabel{{ $item->id }}" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel{{ $item->id }}">Template
                                            Message</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="radio_group">
                                            <input type="radio" name="kehadiran" value="1"
                                                id="radio1{{ $item->id }}"
                                                data-nama-undangan="{{ $item->nama_undangan }}"
                                                data-item-id="{{ $item->id }}">
                                            <label for="radio1{{ $item->id }}" class="radio_label">1</label>

                                            <input type="radio" name="kehadiran" value="2"
                                                id="radio2{{ $item->id }}"
                                                data-nama-undangan="{{ $item->nama_undangan }}"
                                                data-item-id="{{ $item->id }}">
                                            <label for="radio2{{ $item->id }}" class="radio_label">2</label>

                                            <input type="radio" name="kehadiran" value="3"
                                                id="radio3{{ $item->id }}"
                                                data-nama-undangan="{{ $item->nama_undangan }}"
                                                data-item-id="{{ $item->id }}">
                                            <label for="radio3{{ $item->id }}" class="radio_label">3</label>
                                        </div>
                                        <textarea class="form-control mt-3" rows="20" id="nama_undangan{{ $item->id }}" name="nama_undangan"
                                            placeholder="Silahkan pilih template message terlebih dahulu" readonly></textarea>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#shareModal{{ $item->id }}"
                                            data-nama-undangan="{{ $item->nama_undangan }}"
                                            id="shareButton{{ $item->id }}" disabled>Share</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <div class="p-2">{{ $namaUndangans->links() }}</div>
                </div>

                @foreach ($namaUndangans as $item)
                    <div class="modal fade" id="shareModal{{ $item->id }}" tabindex="-1"
                        aria-labelledby="shareModalLabel{{ $item->id }}" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="shareModalLabel">Modal title</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <!-- Isi modal -->
                                    <p>Content of your modal goes here...</p>
                                    <div>
                                        <button class="btn btn-primary"
                                            onclick="copyLink('{{ $item->id }}', '{{ $undanganAlt1->nama_mempelai_laki }}', '{{ $undanganAlt1->nama_mempelai_perempuan }}', '{{ $item->nama_undangan }}')">
                                            <i class="fas fa-copy"></i> Copy Link
                                        </button>
                                        <a href="#" class="btn btn-primary" id="shareOptionWhatsApp"
                                            data-nama-undangan="{{ $item->nama_undangan }}"
                                            id="shareButton{{ $item->id }}" class="btn btn-primary"
                                            onclick="shareOnWhatsApp('{{ $item->nama_undangan }}', '{{ $item->id }}')">
                                            <i class="fab fa-whatsapp"></i> Share on WhatsApp
                                        </a>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>

    </main>

    @include('layouts.footer')


    <script>
        document.querySelectorAll('input[name="kehadiran"]').forEach(function(radio) {
            radio.addEventListener('change', function() {
                var radioButton = this.value;
                var namaUndangan = this.getAttribute('data-nama-undangan');
                var itemId = this.getAttribute('data-item-id');

                updateMessage(radioButton, namaUndangan, itemId);
                toggleShareButton(itemId); // Panggil fungsi untuk menyesuaikan status tombol "Share"
            });
        });

        function toggleShareButton(itemId) {
            var shareButton = document.getElementById('shareButton' + itemId);
            var selectedRadio = document.querySelector('input[name="kehadiran"]:checked');
            if (selectedRadio) {
                shareButton.removeAttribute('disabled');
            } else {
                shareButton.setAttribute('disabled', 'disabled');
            }
        }

        function updateMessage(radioButton, namaUndangan, itemId) {
            var message = '';
            if (radioButton === '1') {
                message = "Assalamu'alaikum Wr. Wb\n" +
                    "Bismillahirahmanirrahim\n" +
                    "Yth. " + namaUndangan + ",\n\n" +
                    "Tanpa mengurangi rasa hormat, perkenankan kami mengundang Bapak/Ibu/Saudara/i, teman sekaligus sahabat, untuk menghadiri acara pernikahan kami:\n\n" +
                    namaUndangan + "\n\n" +
                    "Berikut link undangan kami untuk informasi lengkap tentang acara dapat dilihat di sini:\n\n" +
                    "127.0.0.1:8000/{{ $undanganAlt1->nama_mempelai_laki }}&{{ $undanganAlt1->nama_mempelai_perempuan }}/" +
                    namaUndangan + "\n\n" +
                    "Merupakan suatu kebahagiaan bagi kami apabila Bapak/Ibu/Saudara/i berkenan untuk hadir dan memberikan doa restu.\n\n" +
                    "Mohon maaf perihal undangan hanya dibagikan melalui pesan ini. Terima kasih banyak atas perhatiannya.\n\n" +
                    "\n\n" +
                    "Terima Kasih.";
            } else if (radioButton === '2') {
                message = "Shalom\n" +
                    "Yth. " + namaUndangan + ",\n\n" +
                    "Tanpa mengurangi rasa hormat, perkenankan kami mengundang Bapak/Ibu/Saudara/i, teman sekaligus sahabat, untuk menghadiri acara pernikahan kami:\n\n" +
                    namaUndangan + "\n\n" +
                    "Berikut link undangan kami untuk informasi lengkap tentang acara dapat dilihat di sini:\n\n" +
                    "127.0.0.1:8000/{{ $undanganAlt1->nama_mempelai_laki }}&{{ $undanganAlt1->nama_mempelai_perempuan }}/" +
                    namaUndangan + "\n\n" +
                    "Merupakan suatu kebahagiaan bagi kami apabila Bapak/Ibu/Saudara/i berkenan untuk hadir dan memberikan doa restu.\n\n" +
                    "Mohon maaf perihal undangan hanya dibagikan melalui pesan ini. Terima kasih banyak atas perhatiannya.\n\n" +
                    "\n\n" +
                    "Terima Kasih.";
            } else if (radioButton === '3') {
                message = "Pesanan untuk radio button 3";
            }

            document.getElementById('nama_undangan' + itemId).value = message;
        }

        function shareOnWhatsApp(namaUndangan, itemId) {
            var message = document.getElementById('nama_undangan' + itemId).value;
            var encodedMessage = encodeURIComponent(message);
            var whatsappLink = "https://wa.me/?text=" + encodedMessage;
            window.open(whatsappLink, '_blank');
        }

        function copyLink(itemId, namaMempelaiLaki, namaMempelaiPerempuan, namaUndangan) {
            var link = "127.0.0.1:8000/" + namaMempelaiLaki + "&" + namaMempelaiPerempuan + "/" + namaUndangan;
            navigator.clipboard.writeText(link)
                .then(function() {
                    alert("Link berhasil disalin: " + link);
                })
                .catch(function(error) {
                    console.error("Gagal menyalin link: ", error);
                });
        }
    </script>



    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/fontawesome.js"
        integrity="sha384-dPBGbj4Uoy1OOpM4+aRGfAOc0W37JkROT+3uynUgTHZCHZNMHfGXsmmvYTffZjYO" crossorigin="anonymous">
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Fungsi untuk menangani pemilihan semua checkbox
            document.getElementById('selectAll').addEventListener('change', function() {
                var checkboxes = document.querySelectorAll('.delete-checkbox');
                checkboxes.forEach(function(checkbox) {
                    checkbox.checked = document.getElementById('selectAll').checked;
                });
            });

            // Menangani klik pada tombol delete
            var deleteButtons = document.querySelectorAll('.delete-btn');
            deleteButtons.forEach(function(button) {
                button.addEventListener('click', function(event) {
                    event.preventDefault();
                    var itemId = this.getAttribute('namaUndangans-id');
                    Swal.fire({
                        title: "Are you sure?",
                        text: "You won't be able to revert this!",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#3085d6",
                        cancelButtonColor: "#d33",
                        confirmButtonText: "Yes, delete it!"
                    }).then((result) => {
                        if (result.isConfirmed) {
                            document.getElementById('deleteForm').action =
                                "{{ route('nama-undangan.destroy', ['id' => ':id']) }}"
                                .replace(':id', itemId);
                            document.getElementById('deleteForm').submit();
                            Swal.fire(
                                'Deleted!',
                                'Your file has been deleted.',
                                'success'
                            );
                        }
                    });
                });
            });

            // Menangani penghapusan saat tombol "Hapus yang Dipilih" ditekan
            document.getElementById('deleteSelected').addEventListener('click', function(event) {
                event.preventDefault();

                // Cek apakah ada setidaknya satu checkbox yang dicentang
                var anyChecked = false;
                var checkboxes = document.querySelectorAll('.delete-checkbox');
                checkboxes.forEach(function(checkbox) {
                    if (checkbox.checked) {
                        anyChecked = true;
                    }
                });

                if (anyChecked) {
                    Swal.fire({
                        title: "Are you sure?",
                        text: "You won't be able to revert this!",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#3085d6",
                        cancelButtonColor: "#d33",
                        confirmButtonText: "Yes, delete it!"
                    }).then((result) => {
                        if (result.isConfirmed) {
                            document.getElementById('deleteForm').submit();
                            Swal.fire(
                                'Deleted!',
                                'Your files have been deleted.',
                                'success'
                            );
                        }
                    });
                } else {
                    Swal.fire(
                        'No checkbox selected',
                        'Please select at least one item to delete',
                        'error'
                    );
                }
            });

            function copyLink(url) {
                // Membuat elemen input untuk menampung URL
                var tempInput = document.createElement('input');
                tempInput.value = url;
                document.body.appendChild(tempInput);
                tempInput.select();
                tempInput.setSelectionRange(0, 99999); // Untuk perangkat mobile
                document.execCommand('copy');
                document.body.removeChild(tempInput);

                // Memberikan umpan balik kepada pengguna
                alert('Link berhasil disalin!');
            }
        });
    </script>
@endsection

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const searchInput = document.getElementById('searchInput');
        const tableRows = document.querySelectorAll('.table tbody tr');
        const noDataMessage = document.getElementById('noDataMessage');

        searchInput.addEventListener('input', function() {
            const searchText = this.value.toLowerCase();
            let found = false;

            tableRows.forEach(function(row) {
                const rowData = row.innerText.toLowerCase();
                if (rowData.includes(searchText)) {
                    row.style.display = '';
                    found = true;
                } else {
                    row.style.display = 'none';
                }
            });

            if (!found) {
                noDataMessage.style.display = 'block';
            } else {
                noDataMessage.style.display = 'none';
            }
        });
    });
</script>
