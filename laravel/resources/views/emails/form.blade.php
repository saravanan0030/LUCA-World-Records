<h2>New Submission Received</h2>

<p><strong>Name:</strong> {{ $data['name'] ?? 'N/A' }}</p>
<p><strong>Date of Birth:</strong> {{ $data['dob'] ?? 'N/A' }}</p>
<p><strong>Mobile:</strong> {{ $data['mobile'] ?? $data['org_mobile'] ?? 'N/A' }}</p>
<p><strong>Email:</strong> {{ $data['email'] ?? $data['org_email'] ?? 'N/A' }}</p>

<p><strong>Country:</strong> {{ $data['country'] ?? 'N/A' }}</p>
<p><strong>State:</strong> {{ $data['state'] ?? 'N/A' }}</p>
<p><strong>City:</strong> {{ $data['city'] ?? 'N/A' }}</p>
<p><strong>Zip:</strong> {{ $data['zip'] ?? 'N/A' }}</p>

<p><strong>Description:</strong> {{ $data['description'] ?? 'N/A' }}</p>

<h3>Organization Information (if applicable)</h3>
<p><strong>Apply For:</strong> {{ $data['applyFor'] ?? 'N/A' }}</p>
<p><strong>Company Name:</strong> {{ $data['company_name'] ?? 'N/A' }}</p>
<p><strong>Designation:</strong> {{ $data['designation'] ?? 'N/A' }}</p>
<p><strong>Company Type:</strong> {{ $data['company_type'] ?? 'N/A' }}</p>
