<?php
return [
  [
    'module'  => 'blocklist',
    'name'    => 'blocklist_property_type',
    'entity'  => 'OptionGroup',
    'cleanup' => 'never',
    'params'  => [
      'version'   => 3,
      'name'      => 'blocklist_property_type',
      'title'     => 'Blocklist Property Type',
      'data_type' => 'Integer',
      'is_active' => 1,
    ],
  ],
  [
    'module'  => 'blocklist',
    'name'    => 'blocklist_property_type_email',
    'entity'  => 'OptionValue',
    'cleanup' => 'never',
    'params'  => [
      'version'         => 3,
      'option_group_id' => 'blocklist_property_type',
      'value'           => 1,
      'name'            => 'email',
      'label'           => 'Email',
      'is_active'       => 1,
    ],
  ],
  [
    'module'  => 'blocklist',
    'name'    => 'blocklist_property_type_phone',
    'entity'  => 'OptionValue',
    'cleanup' => 'never',
    'params'  => [
      'version'         => 3,
      'option_group_id' => 'blocklist_property_type',
      'value'           => 2,
      'name'            => 'phone',
      'label'           => 'Phone',
      'is_active'       => 1,
    ],
  ],
  [
    'module'  => 'blocklist',
    'name'    => 'blocklist_property_type_contact_id',
    'entity'  => 'OptionValue',
    'cleanup' => 'never',
    'params'  => [
      'version'         => 3,
      'option_group_id' => 'blocklist_property_type',
      'value'           => 3,
      'name'            => 'contact_id',
      'label'           => 'Contact ID',
      'is_active'       => 1,
    ],
  ],
  [
    'module'  => 'blocklist',
    'name'    => 'blocklist_property_type_ip_address',
    'entity'  => 'OptionValue',
    'cleanup' => 'never',
    'params'  => [
      'version'         => 3,
      'option_group_id' => 'blocklist_property_type',
      'value'           => 4,
      'name'            => 'ip_address',
      'label'           => 'IP Address (CIDR)',
      'is_active'       => 1,
    ],
  ],
  [
    'module'  => 'blocklist',
    'name'    => 'blocklist_block_reason',
    'entity'  => 'OptionGroup',
    'cleanup' => 'never',
    'params'  => [
      'version'   => 3,
      'name'      => 'blocklist_block_reason',
      'title'     => 'Blocklist Block Reason',
      'data_type' => 'Integer',
      'is_active' => 1,
    ],
  ],
  [
    'module'  => 'blocklist',
    'name'    => 'blocklist_block_reason_spam',
    'entity'  => 'OptionValue',
    'cleanup' => 'never',
    'params'  => [
      'version'         => 3,
      'option_group_id' => 'blocklist_block_reason',
      'value'           => 1,
      'name'            => 'spam',
      'label'           => 'Spam',
      'is_active'       => 1,
    ],
  ],
  [
    'module'  => 'blocklist',
    'name'    => 'blocklist_block_reason_manual',
    'entity'  => 'OptionValue',
    'cleanup' => 'never',
    'params'  => [
      'version'         => 3,
      'option_group_id' => 'blocklist_block_reason',
      'value'           => 2,
      'name'            => 'manual',
      'label'           => 'Manual',
      'is_active'       => 1,
    ],
  ],
  [
    'module'  => 'blocklist',
    'name'    => 'blocklist_block_reason_junk',
    'entity'  => 'OptionValue',
    'cleanup' => 'never',
    'params'  => [
      'version'         => 3,
      'option_group_id' => 'blocklist_block_reason',
      'value'           => 3,
      'name'            => 'junk',
      'label'           => 'Junk',
      'is_active'       => 1,
    ],
  ],
];
