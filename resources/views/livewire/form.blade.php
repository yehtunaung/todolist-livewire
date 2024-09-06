<div class="d-flex mt-5">
    <div class="col-md-6 mx-2">
        <select wire:model.live="companyID" class="form-control">
        <option value="">Please Select</option>
        @foreach ($this->companies as $company)
            <option value="{{ $company->id }}">{{ $company->name }}</option>
        @endforeach
        </select>
    </div>
    <div class="col-md-6">
        <select class="form-control">
            <option wire:model.live="phoneID" value="">Select phone</option>
            @foreach ($this->phones as $phone)
                <option value="{{ $phone->id }}">{{ $phone->name }}</option>
            @endforeach
        </select>
    </div>
</div>