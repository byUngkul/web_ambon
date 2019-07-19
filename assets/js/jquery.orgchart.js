(function($) {
    $.fn.orgChart = function(options) {
        var opts = $.extend({}, $.fn.orgChart.defaults, options);
        return new OrgChart($(this), opts);        
    } 
	
    $.fn.orgChart.defaults = {
        data: [{id:1, name:'Root', parent: 0}],
        showControls: false,
        allowEdit: false,
        onAddNode: null,
        onDeleteNode: null,
        onClickNode: null,
        newNodeText: ''
    }; 
	
    function OrgChart($container, opts){
        var data = opts.data;
        var nodes = {};
        var rootNodes = [];
        this.opts = opts;
        this.$container = $container;
        var self = this;

        this.draw = function(){
            $container.empty().append(rootNodes[0].render(opts));
            $container.find('.node').click(function(){
                if(self.opts.onClickNode !== null){
                    self.opts.onClickNode(nodes[$(this).attr('node-id')]);
                }
            });

            if(opts.allowEdit){
                $container.find('.node h2').click(function(e){
                    var thisId = $(this).parent().attr('node-id');
                    self.startEdit1(thisId);
                    e.stopPropagation();
                });
				
                $container.find('.node h3').click(function(e){
                    var thisId = $(this).parent().attr('node-id');
                    self.startEdit2(thisId);
                    e.stopPropagation();
                });
            } 
        } 

        this.getData = function(){
            var outData = [];
            for(var i in nodes) {
                outData.push(nodes[i].data);
            }
			
            return outData;
        } 
        for(var i in data){
            var node = new Node(data[i]);
            nodes[data[i].id] = node;
        }
 
        for(var i in nodes){
			if(typeof nodes[i].data.parent != 'undefined') {
				if(nodes[i].data.parent == 0) 
					rootNodes.push(nodes[i]); 
				else{
					nodes[nodes[i].data.parent].addChild(nodes[i]);
				}
			}
        }  
        $container.addClass('orgChart');
        self.draw();
    }

    function Node(data){
        this.data = data;
        this.children = [];
        var self = this;

        this.addChild = function(childNode) {
            this.children.push(childNode);
        }

        this.removeChild = function(id){
            for(var i=0;i<self.children.length;i++){
                if(self.children[i].data.id == id){
                    self.children.splice(i,1);
                    return;
                }
            }
        }

        this.render = function(opts){
            var childLength = self.children.length,
                mainTable;

            mainTable = "<table cellpadding='0' cellspacing='0' border='0'>";
            var nodeColspan = (childLength > 0) ? 2*childLength : 2;
            mainTable += "<tr><td colspan='"+nodeColspan+"'>"+self.formatNode(opts)+"</td></tr>";

            if(childLength > 0){
                var downLineTable = "<table cellpadding='0' cellspacing='0' border='0'><tr class='lines x'><td class='line left half'></td><td class='line right half'></td></table>";
                mainTable += "<tr class='lines'><td colspan='"+childLength*2+"'>"+downLineTable+'</td></tr>';

                var linesCols = '';
                for(var i=0;i<childLength;i++){
                    if(childLength==1) 
                        linesCols += "<td class='line left half'></td>";    
                    else if(i==0) 
                        linesCols += "<td class='line left'></td>";      
                    else {
                        linesCols += "<td class='line left top'></td>";
                    }

                    if(childLength==1)
                        linesCols += "<td class='line right half'></td>"; 
                    else if(i==childLength-1)
                        linesCols += "<td class='line right'></td>";
                    else {
                        linesCols += "<td class='line right top'></td>";
                    }
                }
				
                mainTable += "<tr class='lines v'>"+linesCols+"</tr>";
				mainTable += "<tr>";
                
				for(var i in self.children){
                    mainTable += "<td colspan='2'>"+self.children[i].render(opts)+"</td>";
                }
                
				mainTable += "</tr>";
            }
			
            mainTable += '</table>';
            return mainTable;
        }

        this.formatNode = function(opts){
            var jabatanString = '',
				pegawaiString = '',
                descString = '';
				
            if(typeof data.jabatan !== 'undefined')  
                jabatanString = '<h2>'+self.data.jabatan+'</h2>'; 
			
            if(typeof data.name !== 'undefined')  
                // pegawaiString = '<a class="btn btn-success btn-xs btn-pegawai" data-slug="'+this.data.peg_slug+'" data-id="'+this.data.peg_id+'">'+self.data.pegawai+'</a>';
                pegawaiString = '<a class="btn btn-info btn-xs btn-pegawai" data-toggle="modal" data-target="#detailDataPegawai'+this.data.id_peg+'">'+self.data.name+'</a>';  
                buttonsHtml = ''; 
			
            return "<div class='node' node-id='"+this.data.id+"'>"+jabatanString+pegawaiString+descString+buttonsHtml+"</div>";
        }
    } 
})(jQuery); 

