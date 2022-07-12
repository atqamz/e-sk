let userList = document.querySelector(".user-list");
let tambahButton = document.querySelector(".tambahUser");
tambahButton.addEventListener("click", function () {
    tambahUser();
    e.preventDefault();
});

function tambahUser() {
    let data = `
            <div class="row">
                <div class="col-10 mb-3">
                    <select class="form-select" name="user[]">
                        <option selected>Pilih user</option>
                        @foreach ($users as $user)
                        @if ($user->nama == 'admin')@continue @endif
                        <option value="{{$user->id}}">{{$user->nama}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-2 text-end">
                    <a href="#" class="btn btn-danger hapusUser w-100">-</a>
                </div>
            </div>
            `;

    userList.insertAdjacentHTML("beforeend", data);
}

userList.addEventListener("click", function (e) {
    if (e.target.classList.contains("hapusUser")) {
        e.target.parentElement.parentElement.remove();
    }
});

let kontenList = document.querySelector(".konten-list");
let tambahKontenButton = document.querySelector(".tambahKonten");
tambahKontenButton.addEventListener("click", function (e) {
    tambahKonten();
    e.preventDefault();
});

function tambahKonten() {
    let data = `
        <div class="card mb-3">
            <div class="card-header">
                <div class="d-flex">
                    <h4>Konten</h4>
                    <a href="#" class="btn btn-danger hapusKonten ms-auto">-</a>
                </div>

                <div>
                    <label for="judul_konten" class="form-label">Judul Konten</label>
                    <input type="text" class="form-control" id="judul_konten" name="judul_konten">
                </div>
            </div>

            <div class="card-body">
                <div class="subkonten-list">
                    <div class="row">
                        <div class="col-lg-2">
                            <label for="judul_konten" class="form-label">Judul Subkonten</label>
                            <input type="text" class="form-control" id="judul_subkonten" name="judul_subkonten">
                        </div>
                        <div class="col-lg-9">
                            <label for="subkonten" class="form-label">Isi</label>
                            <input type="hidden" id="subkonten" name="subkonten">
                            <trix-editor input="subkonten"></trix-editor>
                        </div>

                        <div class="col-lg-1 text-end">
                            <a href="#" class="btn btn-primary tambahSubkonten">+</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        `;

    kontenList.insertAdjacentHTML("beforeend", data);
}

kontenList.addEventListener("click", function (e) {
    if (e.target.classList.contains("hapusKonten")) {
        e.target.parentElement.parentElement.parentElement.remove();
    }
    e.preventDefault();
});

// document.addEventListener("DOMSubtreeModified", (e) => {
let subkontenLists = document.querySelectorAll(`.subkonten-list`);
let tambahSubkontenButtons = document.querySelectorAll(`.tambahSubkonten`);
Array.from(tambahSubkontenButtons).forEach((element, index) => {
    console.log(tambahSubkontenButtons.length);
    element.addEventListener("click", function (e) {
        let data = `
                <div class="row mb-2">
                    <div class="col-lg-2">
                        <label for="judul_konten" class="form-label">Judul Subkonten</label>
                        <input type="text" class="form-control" id="judul_subkonten" name="judul_subkonten">
                    </div>
                    <div class="col-lg-9">
                        <label for="subkonten" class="form-label">Isi</label>
                        <input type="hidden" id="subkonten" name="subkonten">
                        <trix-editor input="subkonten"></trix-editor>
                    </div>

                    <div class="col-lg-1 text-end">
                        <a href="#" class="btn btn-danger hapusSubkonten">-</a>
                    </div>
                </div>
                `;

        element.parentElement.parentElement.parentElement.insertAdjacentHTML(
            "beforeend",
            data
        );

        e.preventDefault();
    });
});

Array.from(subkontenLists).forEach((element, index) => {
    element.addEventListener("click", function (e) {
        if (e.target.classList.contains("hapusSubkonten")) {
            e.target.parentElement.parentElement.remove();
        }
    });
});
// });
