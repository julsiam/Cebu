@extends('layouts.app')
<style>
    section {
        margin: 15px;
    }

    .wrapper {
        display: grid;
        grid-template-columns: 3fr .5fr;

    }

    h1 {
        font-size: 30px;
        color: 314964;
        text-transform: uppercase;
        font-weight: 300;
        text-align: center;
    }

    table {
        width: 250%;
        table-layout: fixed;

    }

    .tbl-header {}

    .tbl-content {
        width: 100%;
        height: 420px;
        overflow-x: auto;
        margin-top: 0px;
        border: 1px solid rgba(0, 0, 0, 0.3);
    }

    th {
        padding: 20px 10px;
        text-align: left;
        font-weight: 500;
        font-size: 12px;
        color: rgb(0, 0, 0);
        text-transform: uppercase;
    }


    td {
        padding: 5px;
        text-align: left;
        vertical-align: middle;
        font-weight: 300;
        font-size: 12px;
        color: rgb(0, 0, 0);

    }

    button {
        border: 0;
        outline: none;
        border-radius: 50px;
        padding: 8px;
        width: 65mm;
        font-size: 15px;
        font-weight: 200;
        text-transform: uppercase;
        letter-spacing: 0.1em;
        background: #314964;
        color: white;
        transition: all 0.5s ease;
        cursor: pointer;
    }

    button:hover,
    button:focus {
        background: #000000;
    }
</style>

@section('content')
    @if (\Session::has('success'))
        <div class="alert alert-success">
            <p>{{ \Session::get('success') }}</p>
        </div><br />
    @endif

    <section>
        <div class="wrapper">
            <h1>{{ __('Business Permit Requests') }}</h1>
            <a href="{{ url('/staffHome') }}"> <button>{{ __('Back to Dashboard') }}</button></a>
        </div>

        <div class="tbl-content">
            <div class="tbl-header">
                <table cellpadding="0" cellspacing="0" border="0">
                    <thead style="background-color: #314964af;">
                        <tr>
                            <th>Business<br>Type</th>
                            <th>DTI No.</th>
                            <th>Payment<br>Mode</th>
                            <th>Application<br>Date</th>
                            <th>TIN</th>
                            <th>Ammend<br>From</th>
                            <th>Ammend<br>To</th>
                            <th>First<br>Name</th>
                            <th>Middle<br>Name</th>
                            <th>Last<br>Name</th>
                            <th>Trade<br>Name</th>
                            <th>Incentive</th>
                            <th>Business<br>Address</th>
                            <th>Postal<br>Code</th>
                            <th>Business <br> Hotline</th>
                            <th>Owner's<br>Address</th>
                            <th>Owner's<br>Postal Code</th>
                            <th>Owner's<br>Hotline</th>
                            <th>Emergency<br>Contact<br>Person</th>
                            <th>Emergency<br>Contact</th>
                            <th>Business<br>Area</th>
                            <th>Total<br>No.of<br>Employee</th>
                            <th>Lessor<br>Name</th>
                            <th>Lessor<br>Address</th>
                            <th>Lessor<br>Phone</th>
                            <th>Lessor<br>Email</th>
                            <th>Monthly<br>Rent</th>
                            <th>Filled-Up<br>File</th>
                            <th>Occupancy<br>File</th>
                            <th>Brgy.<br>Clearance<br>File</th>
                            <th>Sanitary<br>File</th>
                            <th>Fire<br>Safety<br>File</th>
                            <th>Other<br>File</th>
                            <th>Status</th>
                            <th>Update Status</th>
                        </tr>
                    </thead>
                </table>
            </div>


            <table cellpadding="0" cellspacing="0" border="0">
                <tbody>
                    @foreach ($business_permit as $business_permit)
                        <tr style="  border: 1px solid black">
                            <td>{{ $business_permit->businessType }}</td>
                            <td>{{ $business_permit->dtiNo }}</td>
                            <td>{{ $business_permit->paymentMode }}</td>
                            <td>{{ $business_permit->applicationDate }}</td>
                            <td>{{ $business_permit->tin }}</td>
                            <td>{{ $business_permit->ammendFrom }}</td>
                            <td>{{ $business_permit->ammendTo }}</td>
                            <td>{{ $business_permit->fname }}</td>
                            <td>{{ $business_permit->mname }}</td>
                            <td>{{ $business_permit->lname }}</td>
                            <td>{{ $business_permit->tradeName }}</td>
                            <td>{{ $business_permit->incentive }}</td>
                            <td>{{ $business_permit->businessAdd }}</td>
                            <td>{{ $business_permit->postalCode }}</td>
                            <td>{{ $business_permit->businessHotline }}</td>
                            <td>{{ $business_permit->ownerAdd }}</td>
                            <td>{{ $business_permit->ownerPostalCode }}</td>
                            <td>{{ $business_permit->ownerHotline }}</td>
                            <td>{{ $business_permit->contactPerson }}</td>
                            <td>{{ $business_permit->emergencyContact }}</td>
                            <td>{{ $business_permit->businessArea }}</td>
                            <td>{{ $business_permit->employeeTotal }}</td>
                            <td>{{ $business_permit->lessorName }}</td>
                            <td>{{ $business_permit->lessorAdd}}</td>
                            <td>{{ $business_permit->lessorPhone }}</td>
                            <td>{{ $business_permit->lessorEmail }}</td>
                            <td>{{ $business_permit->monthlyRent }}</td>
                            <td>{{ $business_permit->filledupFile }}</td>
                            <td>{{ $business_permit->occupancyFile }}</td>
                            <td>{{ $business_permit->brgyClearanceFile }}</td>
                            <td>{{ $business_permit->sanitaryFile }}</td>
                            <td>{{ $business_permit->fireSafetyFile }}</td>
                            <td>{{ $business_permit->otherFile }}</td>
                            <td>{{ $business_permit->status }}</td>
                            <td><a href={{ 'editBusiness/' . $business_permit['id'] }}>Update</a>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
