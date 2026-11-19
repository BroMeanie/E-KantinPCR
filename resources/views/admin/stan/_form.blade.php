@php($jenisList = \App\Models\Stan::JENIS)
<div class="row">
    <div class="col-lg-6">
        <div class="mb-3">
            <label for="nama_stan" class="form-label">Nama stan <span class="text-danger">*</span></label>
            <input type="text" id="nama_stan" name="nama_stan"
                class="form-control @error('nama_stan') is-invalid @enderror"
                value="{{ old('nama_stan', $stan->nama_stan ?? '') }}" required>
            @error('nama_stan')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="jenis" class="form-label">Jenis <span class="text-danger">*</span></label>
            <select id="jenis" name="jenis" class="form-select @error('jenis') is-invalid @enderror" required>
                <option value="">-- Pilih jenis --</option>
                @foreach ($jenisList as $jenis)
                    <option value="{{ $jenis }}" @selected(old('jenis', $stan->jenis ?? '') === $jenis)>{{ $jenis }}</option>
                @endforeach
            </select>
            @error('jenis')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="nama_pemilik" class="form-label">Nama pemilik</label>
            <input type="text" id="nama_pemilik" name="nama_pemilik"
                class="form-control @error('nama_pemilik') is-invalid @enderror"
                value="{{ old('nama_pemilik', $stan->nama_pemilik ?? '') }}">
            @error('nama_pemilik')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="col-lg-6">
        <div class="mb-3">
            <label for="lokasi" class="form-label">Lokasi di kantin</label>
            <input type="text" id="lokasi" name="lokasi" class="form-control @error('lokasi') is-invalid @enderror"
                value="{{ old('lokasi', $stan->lokasi ?? '') }}">
            @error('lokasi')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="no_whatsapp" class="form-label">Nomor WhatsApp</label>
            <input type="text" id="no_whatsapp" name="no_whatsapp" inputmode="tel"
                class="form-control @error('no_whatsapp') is-invalid @enderror"
                value="{{ old('no_whatsapp', $stan->no_whatsapp ?? '') }}" placeholder="08xxxxxxxxxx">
            @error('no_whatsapp')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-check form-switch mb-4">
            <input type="hidden" name="is_aktif" value="0">
            <input class="form-check-input" type="checkbox" id="is_aktif" name="is_aktif" value="1"
                @checked(old('is_aktif', $stan->is_aktif ?? true))>
            <label class="form-check-label" for="is_aktif">Stan aktif (tampil untuk pembeli)</label>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('stan.index') }}" class="btn btn-outline-secondary ms-2">Batal</a>
    </div>
</div>
