jQuery(function ($) {

	function renumber($widget) {
		$widget.find('.hovercraft-zigzag-row').each(function (i) {
			$(this).find('.hovercraft-zigzag-row-number').text('#' + (i + 1));
		});
	}

	function init($widget) {

		var $rows = $widget.find('.hovercraft-zigzag-rows');

		$rows.sortable({
			handle: '.hovercraft-zigzag-row-number',
			stop: function () {
				renumber($widget);
			}
		});

		renumber($widget);

		$widget.on('click', '.hovercraft-zigzag-add-row', function () {
			var tpl = $widget.find('.hovercraft-zigzag-row-template').html();
			$rows.append(tpl);
			renumber($widget);
		});

		$widget.on('click', '.hovercraft-zigzag-remove-row', function () {
			$(this).closest('.hovercraft-zigzag-row').remove();
			renumber($widget);
		});

		$widget.on('click', '.hovercraft-zigzag-select-image', function (e) {
			e.preventDefault();

			var $row = $(this).closest('.hovercraft-zigzag-row');
			var $id = $row.find('.hovercraft-zigzag-image-id');
			var $preview = $row.find('.hovercraft-zigzag-image-preview');

			var frame = wp.media({
				title: 'select image',
				button: { text: 'use image' },
				multiple: false
			});

			frame.on('select', function () {
				var attachment = frame.state().get('selection').first().toJSON();
				$id.val(attachment.id);
				$preview.html('<img src="' + attachment.sizes.thumbnail.url + '" alt="">');
			});

			frame.open();
		});

		$widget.on('click', '.hovercraft-zigzag-remove-image', function () {
			var $row = $(this).closest('.hovercraft-zigzag-row');
			$row.find('.hovercraft-zigzag-image-id').val('');
			$row.find('.hovercraft-zigzag-image-preview').empty();
		});
	}

	$('.hovercraft-zigzag-widget').each(function () {
		init($(this));
	});

	$(document).on('widget-added widget-updated', function (e, widget) {
		var $widget = $(widget).find('.hovercraft-zigzag-widget');
		if ($widget.length) {
			init($widget);
		}
	});

});
